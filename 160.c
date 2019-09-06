/**
 * Definition for singly-linked list.
 * struct ListNode {
 *     int val;
 *     struct ListNode *next;
 * };
 */
struct ListNode *getIntersectionNode(struct ListNode *headA, struct ListNode *headB) {
    if (NULL == headA && NULL == headB)
        {
            return NULL;
        }

        struct ListNode *pA = headA;
        struct ListNode *pB = headB;

        int lenA = 0;
        int lenB = 0;

        while (pA != NULL)
        {
            pA = pA->next;
            lenA++;
        }

        while (pB != NULL)
        {
            pB = pB->next;
            lenB++;
        }

        pA = headA;
        pB = headB;

        if (lenA > lenB)
        {
            int diff = lenA - lenB;

            while (diff-- > 0)
            {
                pA = pA->next;
            }
        } else if (lenA < lenB)
        {
            int diff = lenB - lenA;

            while (diff-- > 0)
            {
                pB = pB->next;
            }
        }

        while (pA != pB)
        {
            pA = pA->next;
            pB = pB->next;
        }

        return (NULL == pA) ? NULL : pA;
}